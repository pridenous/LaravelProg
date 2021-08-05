<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <ul class="navbar">
        @foreach($navigations as $name=>$url)
            <li><a href="{{ $url }}">{{ $name }}</a></li>
        @endforeach
    </ul>
</div>