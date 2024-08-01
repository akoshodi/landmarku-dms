<footer class="c-footer">
    <div>
        <strong>
            @lang('Copyright') &copy; {{ date('Y') }}
            <x-link href="http://lmu.edu.ng" target="_blank" :text="__(appName())" />
        </strong>

        @lang('All Rights Reserved')
    </div>

    <div class="mfs-auto">
        @lang('Powered by')
        <x-link href="http://csis.lmu.edu.ng" target="_blank" text="CSIS" /> &
        <x-link href="https://coreui.io" target="_blank" text="CoreUI" />
    </div>
</footer>
