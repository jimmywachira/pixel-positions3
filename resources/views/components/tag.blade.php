@props(['tag','size' => 'base'])

    @php
      $classes = "bg-white/5 rounded-l rounded-tl-none rounded-br-fullhover:bg-white/25 transition-colors duration-300 font-bold";

     if ($size === 'base') {
        $classes = ' px-5 py-1 text-sm';
        }

      if ($size === 'small') { 
          $classes = ' px-3 py-1 text-xm';
        }
    @endphp
    
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ ucwords($tag->name) }}</a>