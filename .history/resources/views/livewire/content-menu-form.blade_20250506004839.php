<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" wire:model="title" id="title" class="form-control" />
        </div>

        <div class="form-group">
            <label for="details">Detaylar</label>
            <textarea wire:model="details" id="details" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="menus">Menüler</label>
            <select wire:model="menus" id="menus" class="form-control" multiple>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Resim</label>
            <input type="file" wire:model="image" id="image" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>
