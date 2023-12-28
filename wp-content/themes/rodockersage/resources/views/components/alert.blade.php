<div {{ $attributes->merge(['class' => $type]) }}>
  <p class="text-green font-extrabold with_padding">{!! $message ?? $slot !!}</p>
</div>
