@extends('layouts.app')

@section('content')
    <div class="container"><br>
        <div class="row">
            <div class="col">
                <h2 class="text-center text-body"><strong>Manage Dictionary</strong></h2>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <a href="admin/DictionaryData"></a>
                    <div class="ico-wrap">
                        <span class="mbr-iconfont far fa-book fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">View <span>Dictionary Data</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">View existing data in the database.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <a href="admin/UpdateData"></a>
                    <div class="ico-wrap">
                        <span class="mbr-iconfont far fa-edit fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Update <span>Dictionary Data</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Modify dictionary data and save the changes.</p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <a href="admin/AddData"></a>
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-cart-plus fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Add <span>New Word</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Add new data to the dictionary.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <a href="#"></a>
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-trash-alt fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Delete <span>Word</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Delete data from existing dictionary.</p>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
@endsection
