@extends('layouts.dashboard.app')
@section('content')
    <form method="POST" action="{{ route('dashboard.tambahsupplier.store') }}"enctype="multipart/form-data"> @csrf
        <div class="mt-3">
            {{-- nama supplier --}}
            <div>
                <label>Nama supplier</label>
                <input type="text" name="nama_supplier" class="input w-full border mt-2" placeholder="">
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
                    <input type="text" name="alamat" class="input w-full border mt-2" placeholder="">
                    </div>
                </div>
            </div>

            <div class="mt-3 ">
                <label>No Telepon</label>
                <div class="sm:grid grid-cols-3 gap-2">
                    <div class="relative mt-2">
                        {{-- <div
                            class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">
                            Unit</div> --}}
                        <div class="flex flex-col sm:flex-row items-center">
                            <input type="text" name="no_telp" class="input w-full border mt-2"
                                placeholder="">
                        </div>
                    </div>
                    {{-- <div class="relative mt-2">
                <div class="absolute top-0 left-0 rounded-l w-20 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Wholesale</div>
                <div class="pl-3">
                    <input type="text" class="input pl-20 w-full border col-span-4" placeholder="Price">
                </div>
            </div>
            <div class="relative mt-2">
                <div class="absolute top-0 left-0 rounded-l w-12 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Bulk</div>
                <div class="pl-3">
                    <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Price">
                </div>
            </div>
        </div> --}}
                </div>

                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input type="checkbox" class="input input--switch border">
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="button w-24 border text-gray-700 mr-1" id="cancelButton">Cancel</button>
                    <button type="submit" class="button w-24 bg-theme-1 text-white">Save</button>
                </div>
            </div>
    </form>
@endsection

