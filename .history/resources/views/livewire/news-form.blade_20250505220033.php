<div class="p-4">

    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <h2>{{ $newsId ? 'Haberi Düzenle' : 'Yeni Haber Ekle' }}</h2>

    <form wire:submit.prevent="storeOrUpdate">
        <input type="text" wire:model="title" placeholder="Başlık"><br>
        <textarea wire:model="details" placeholder="Detaylar"></textarea><br>
        <input type="text" wire:model="image" placeholder="Görsel URL"><br>
        <button type="submit">{{ $newsId ? 'Güncelle' : 'Ekle' }}</button>
        @if($newsId)
            <button type="button" wire:click="resetForm">İptal</button>
        @endif
    </form>

    <hr>

    <h3>Haber Listesi</h3>
    <table border="1" cellpadding="5" cellspacing="0" style="width:100%;">
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Detay</th>
                <th>Görsel</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $n)
                <tr>
                    <td>{{ $n->title }}</td>
                    <td>{{ $n->details }}</td>
                    <td>
                        @if(!empty($n->image[0]))
                            <img src="{{ $n->image[0] }}" width="80">
                        @endif
                    </td>
                    <td>
                        <button wire:click="edit({{ $n->id }})">Düzenle</button>
                        <button wire:click="delete({{ $n->id }})" onclick="return confirm('Silinsin mi?')">Sil</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
