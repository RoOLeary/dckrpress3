
<div>
<<<<<<< HEAD
    <h2 class="text-2xl text-red font-bold">
        {{ $bannerText }}
    </h2>
   <p>And some text: {!! $textField ?? $slot !!}</p>
=======
    <h2 className="text-2xl text-red-500">
    {!! $sageTitle ?? $slot !!}
        BIP - {{ $data }}
    </h2>
    {!! $textField ?? $slot !!}
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
</div>
