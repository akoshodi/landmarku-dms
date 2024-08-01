<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use LdapRecord\Laravel\Auth\HasLdapUser;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable implements LdapAuthenticatable
{
    use HasApiTokens, HasFactory, Notifiable, AuthenticatesWithLdap, HasLdapUser, HasRoles, Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $guard_name = 'web';


    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public function getOfficialMailAttribute()
    {
        return $this->username . '@lmu.edu.ng';
    }


    public function scopeIsActive($query, $value)
    {
        return $query->where('is_active', $value);
    }

    public function scopeWithLastLoginDate($query)
    {
        // Dynamic relationship
//        $query->addSelect(['last_login_id' => Login::select('id')
//            ->whereColumn('user_id', 'users.id')
//            ->latest()
//            ->take(1)
//        ])->with('lastLogin');
// Subquery
        $query->addSelect(['last_login_at' => Login::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->latest()
            ->take(1)
        ])->withCasts(['last_login_at' => 'datetime']);
    }

    public function lastLogin()
    {
        return $this->belongsTo(Login::class);
    }

    /**
     * Get the document records associated with the user.
     */
    public function documents()
    {
        return $this->hasMany('App\Models\Document');
    }

    /**
     * Get the gender of user.
     */
    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\StudentStatus');
    }



}
