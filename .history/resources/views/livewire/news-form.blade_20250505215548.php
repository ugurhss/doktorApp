<div class="p-4">
    <h2>Yeni Haber Ekle</h2>

    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="store">
        <input type="text" wire:model="title" placeholder="Başlık"><br>
        <textarea wire:model="details" placeholder="Detaylar"></textarea><br>
        <input type="text" wire:model="image" placeholder="Görsel URL"><br>
        <button type="submit">Ekle</button>
    </form>

    <hr>

    <h3>Haberler</h3>
    @foreach($news as $n)
        <div style="margin-bottom: 1rem;">
            <strong>{{ $n->title }}</strong>
            <p>{{ $n->details }}</p>
            @if(!empty($n->image[0]))
                <img src="{{ $n->image[0] }}" width="100">
            @endif
            <br>
            <button wire:click="delete({{ $n->id }})" onclick="return confirm('Silinsin mi?')">Sil</button>
        </div>
    @endforeach
</div>
