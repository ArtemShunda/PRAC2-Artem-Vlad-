<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'" title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>


    <h2>De 5 populairste handleidingen:</h2>
    <ol>
        @forelse ($manuals as $manual)
            <li>
                @if ($manual->locally_available)
                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/" title="{{ $manual->name }}">{{ $manual->name }}</a>
                    ({{ $manual->filesize_human_readable }})
                @else
                    <a href="{{ $manual->url }}" target="_blank" rel="noopener" title="{{ $manual->name }}">{{ $manual->name }}</a>
                @endif
                <span>({{ number_format($manual->views_count) }} views)</span>
            </li>
        @empty
            <li>Er zijn geen handleidingen voor dit merk.</li>
        @endforelse
    </ol>

</x-layouts.app>
