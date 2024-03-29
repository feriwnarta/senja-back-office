{{-- Component ini digunakan untuk membuat item ingredients --}}
{{-- idItem => id item dari database --}}
{{-- itemImage => gambar item --}}
{{-- itemName => nama item --}}

<div class="items-ingredients">
    <div class="row d-flex align-items-center">
        <div class="col-sm-11">
            <div class="item-ingredients d-flex flex-row align-items-center">
            {{-- gambar items ingredient --}}
            <div>
                <img class="items-ingredient-img" src="{{ $itemImage }}" alt="">
            </div>


            {{-- name items ingredient --}}
            <div class="body-text-regular name-item-ingredient">{{ $itemName }}

            </div>
            
            </div>
        </div>
        <div class="col-sm-1">
            <input  id="{{ $idItem }}" class="red-input checkbox" type="checkbox"/>
        </div>

    </div>

    <div id="divider" class="margin-top-20"></div>

</div>