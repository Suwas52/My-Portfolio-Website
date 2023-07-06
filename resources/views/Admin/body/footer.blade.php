<footer class="page-footer">
    @php
        $footer = App\Models\Footer::findOrFail(1);
    @endphp
    <p class="mb-0">{{ $footer->copy_right }}</p>
</footer>
