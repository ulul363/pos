@extends('layouts.dashboard.app')

@section('content')

<form method="POST" action="{{ route('dashboard.supplier.update', $supplier->id ) }}"enctype="multipart/form-data"> 
    @csrf
    @method('PUT')

    <div class="mt-3">
        {{-- nama supplier --}}
        <div>
            <label>Nama supplier</label>
            <input type="text" name="nama_supplier" class="input w-full border mt-2" placeholder="" value="{{$supplier->nama_supplier}}">
        </div>

        {{-- kategori --}}
        {{-- <div class="mt-3">
    <label>Category</label>
    <div class="mt-2">
        <select data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
            <option value="1" selected>Sport & Outdoor</option>
            <option value="2">PC & Laptop</option>
            <option value="3" selected>Smartphone & Tablet</option>
            <option value="4">Photography</option>
        </select>
    </div>
</div> --}}

        {{-- jumlah --}}
        <div class="mt-3">
            <label>Alamat</label>
            <div class=" relative mt-2">
            <div class="flex flex-col sm:flex-row items-center">
                <input type="text" name="alamat" class="input w-full border mt-2" placeholder="" value="{{$supplier->alamat}}">
                </div>
            </div>
        </div>

        <div class="mt-3 ">
            <label>No Telepon</label>
            <div class="sm:grid grid-cols-3 gap-2">
                <div class="relative mt-2">

                    <div class="flex flex-col sm:flex-row items-center">
                        <input type="text" name="no_telp" class="input w-full border mt-2"
                            placeholder="" value="{{$supplier->no_telp}}">
                    </div>
                </div>
               
            </div>

            <div class="mt-3">
                <label>Active Status</label>
                <div class="mt-2">
                    <input type="checkbox" class="input input--switch border" value="{{$supplier->status}}">
                </div>
            </div>
            <div class="text-right mt-5">
                <button type="button" class="button w-24 border text-gray-700 mr-1" id="cancelButton">Cancel</button>
                <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
            </div>
        </div>
</form>

@endsection
