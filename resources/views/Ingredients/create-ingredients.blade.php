@extends('layouts.app')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('appbar')
    <x-navbar.navbar search="false">
        <x-slot:title>
            <div class="navbar-title">Ingredient Library</div>
        </x-slot:title>
    </x-navbar.navbar>
@endsection

@section('page')
    <div class="create-menu-content">
        <div class="row g-0">
            <div class="col-sm-7 offset-1">
                {{-- Title --}}
                <div class="subtitle-2-medium">Create Ingredients</div>

                <div class="content-information">
                    <form id="formSaveIngredient" action="">

                        <div class="row align-items-start">
                            <div class="col-sm-2">
                                <div class="image-picker">
                                    <img id="" src="{{ asset('img/image-pos.png') }}" alt="" srcset=""
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <x-form.input-default id="productName" optional="required" class="" name=""
                                    placeHolder="Daging ayam" label="Item Name">

                                </x-form.input-default>

                                <x-button.select-button placeHolder="" label="Category" class="" optional="required"
                                    id="categorySelect">
                                    <option value="null">Select</option>
                                    @if ($datas != null)
                                    @endif
                                    @foreach ($datas as $data)
                                        <option value="{{ $data['uuidCategory'] }}">{{ $data['category'] }}</option>
                                    @endforeach
                                </x-button.select-button>
                            </div>
                        </div>

                        <div class="margin-top-32">
                            <div class="row">
                                <div class="col">
                                    <div class="subtitle-3-medium">Minimum Quantity</div>
                                    <div id="divider" class="margin-top-12"></div>
                                    <x-form.input-default id="idInputPriceQuantity" class="margin-top-12 input-quantity"
                                        name="" placeHolder="10" label="" optional="required">
                                    </x-form.input-default>
                                </div>
                                <div class="col">
                                    <div class="subtitle-3-medium">Unit</div>
                                    <div id="divider" class="margin-top-12"></div>
                                    <x-button.select-button placeHolder="" label="" class="margin-top-12"
                                        id="unit" optional="required">
                                        <option value="ekor">Ekor</option>
                                        <option value="potong">Potong</option>
                                    </x-button.select-button>
                                </div>
                            </div>
                        </div>

                        {{-- Inventory --}}
                        {{--                        <div id="inventoryMenu" class="margin-top-32"> --}}
                        {{--                            <div class="subtitle-3-medium">Inventory</div> --}}
                        {{--                            <div id="divider" class="margin-top-12"></div> --}}

                        {{--                            <div class="inventory-list"> --}}

                        {{--                            </div> --}}

                        {{--                            <x-button.text-only-primary class="container-fluid margin-top-8" id="btnSettingInventory" --}}
                        {{--                                onClick="settingInventory()" text="Setting Inventory" toogle="modal" --}}
                        {{--                                target="#manageInventoryModal"> --}}

                        {{--                            </x-button.text-only-primary> --}}
                        {{--                        </div> --}}

                        {{-- COGS --}}
                        {{--                        <div id="cogsMenu" class="margin-top-32"> --}}
                        {{--                            <div class="subtitle-3-medium">COGS</div> --}}
                        {{--                            <div id="divider" class="margin-top-12"></div> --}}

                        {{--                            <div class="cogs-list"> --}}

                        {{--                            </div> --}}

                        {{--                            <x-button.text-only-primary class="container-fluid margin-top-8" id="btnSettingInventory" --}}
                        {{--                                onClick="settingCogs()" text="Setting COGS" toogle="modal" target="#manageCogsModal"> --}}

                        {{--                            </x-button.text-only-primary> --}}
                        {{--                        </div> --}}


                        {{-- CTA --}}
                        <div id="ctaActionMenu" class="margin-top-32">

                            <div class="d-flex flex-row justify-content-end">

                                <x-button.text-only-outlined class="" id="" text="Cancel" onClick="">
                                </x-button.text-only-outlined>


                                <x-button.text-only-primary class="margin-left-16" id="Save" onClick="saveIngredient()"
                                    text="Save" type="submit"> </x-button.text-only-primary>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- MODAL MANAGE INVENTORY --}}
        <x-modal.modal-input id="manageInventoryModal" title="Manage Inventory" icon="">
            <table id="" class="table borderless table-modal">
                <thead class="table-head-color-modal">
                    <tr>
                        <th>Variant</th>
                        <th>Track Stock</th>
                        <th>In Stock</th>
                        <th>Minimum Stock</th>
                    </tr>
                </thead>
                <tbody id="listVariantOnInventory">

                </tbody>
            </table>



            <x-slot:footer>
                <x-button.text-only-outlined class="" id="btnCancelVariant" text="Cancel" onClick=""
                    dismiss="modal">
                </x-button.text-only-outlined>

                <x-button.text-only-primary class="" id="btnMoveSelectedItemsVariant" onClick="setInventory()"
                    text="Move Selected Items"> </x-button.text-only-primary>
            </x-slot:footer>

        </x-modal.modal-input>


        {{-- MODAL MANAGE COGS --}}
        <x-modal.modal-input id="manageCogsModal" title="Manage COGS" icon="">
            <table id="" class="table borderless table-modal">
                <thead class="table-head-color-modal">
                    <tr>
                        <th>Variant</th>
                        <th>Track COGS</th>
                        <th>Average Cost</th>
                    </tr>
                </thead>
                <tbody id="listVariantOnCogs">

                </tbody>
            </table>



            <x-slot:footer>
                <x-button.text-only-outlined class="" id="btnCancelVariant" text="Cancel" onClick=""
                    dismiss="modal">
                </x-button.text-only-outlined>

                <x-button.text-only-primary class="" id="btnMoveSelectedItemsVariant" onClick="confirmCogs()"
                    text="Confirm"> </x-button.text-only-primary>
            </x-slot:footer>

        </x-modal.modal-input>
    </div>
@endsection


@section('footer-script')
    <script src="{{ asset('js/ingredients.js') }}"></script>
@endsection
