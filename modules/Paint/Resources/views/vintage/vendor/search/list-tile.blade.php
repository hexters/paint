<a class="py-3 text-decoration-none text-light" target="{{ $item->target }}" href="{{ $item->link_details ?? 'javascript:void(0);' }}">
    <strong>{{ $item->title }}</strong>
    <div class="text-warning">{{ Str::of($item->description)->limit(100) }}</div>
</a>
