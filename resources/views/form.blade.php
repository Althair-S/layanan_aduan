@extends('partials.home')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Formulir Aduan</h5>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap">
                            <div class="form-text">Jika tidak ingin menyampaikan nama, isi dengan "no name".</div>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="gender">
                                <option value="male">Laki-laki</option>
                                <option value="female">Perempuan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Handphone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Masukkan Nomor Handphone">
                            <div class="form-text">Contoh: 081234567890</div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="datec" class="control-label col-form-label">Date of Complaint</label>
                                    <input type="date" class="form-control" id="datec">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label col-form-label">Complaint</label>
                                    <textarea class="form-control" id="exampleTextarea2" rows="2" placeholder="Sampaikan Aduan Disini"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection