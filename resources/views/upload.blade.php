@extends('layouts.upload')
@section('content')
<div class="header">
        <h1 id="hd">เพิ่มผลงาน Upload</h1>

        <div class="upload">
            <div class="preview">
                <h3>ภาพตัวอย่าง</h3>
                <div class="display-img"></div>
            </div>

            <div class="details">
                <div class="headdetails">
                    <h3>รายละเอียดผลงาน</h3>
                </div>
                <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="details-img">
                        <div class="add-img">
                            <p><b>เพิ่มไฟล์ผลงาน</b></p>
                           
                             <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                        </div>
                        <div class="name-img">
                            <p><b>ชื่อผลงาน</b></p>
                             <input type="text" name="title" class="form-control m-2" placeholder="title">
                        </div>

                        <div class="name-img">
                            <p><b>ชื่อผู้ถ่าย</b></p>
                            <input type="text" name="author" class="form-control m-2" placeholder="ผู้ถ่าย" value="{{ Auth::user()->name }}" readonly>
                        </div>

                        <div class="description-img">
                            <p><b>รายละเอียดผลงาน</b></p>

                             <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea> <!-- รายละเอียด -->
                        </div>
                        <div class="type-img">
                           <!-- <p><b>หมวดหมู่รูปภาพ</b></p>
                            <select name="type" id="type">
                                <option value="img"></option>
                            </select>
                        </div>
                        <div class="collection-img">
                            <p><b>เลือกคอลเลกชัน</b></p>
                            <a href="collectioncreate.html"><img src="{{asset('assets/img/upload/createcollec.png') }}" id="collec" width="170px"></a>
                        </div> -->

                             <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection