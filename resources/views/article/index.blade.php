 <x-layout>
<div class="container-fluid">
    <div class="row height-custom justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="diplay-1">tutti gli articoli</h1>
        </div>
    </div>
    <div class="row height-custom justify-content-center align-items-center-text-center">
@forelse  ($articles as $article)
   <div class="col-12 col-md-3">
    <x-card :article="$article" />
   </div>
@empty
    <div class="col-12">
        <h3 class="text-center">
            Non sono stati creati articolo
        </h3>
    </div>
@endforelse
    </div>
</div>
<div class="d-flex-justify-content-center">
    <div>
        {{$articles->links()}}
    </div>
</div>
 </x-layout>