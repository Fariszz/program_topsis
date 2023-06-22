@extends('form.add-data',[
    'title' => 'Tambah Data',
    'subTitle' => 'Tambah Data Alternatif'
])

@section('content-form')
<div class="card card-bordered card-preview">
    <div class="card-inner">
        <div class="row gy-4">
            <div class="col-sm-8">
                <form action="{{ route('add-data.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="default-01">Input Nama Alternatif</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="default-01" placeholder="Input Kriteria Harga" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="default-01">Input Bobot Kriteria Harga</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" id="default-01" placeholder="Input Kriteria Harga (minimal 300rb)" name="c1" min="300000" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Tahun Rilis</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c2">
                                @foreach($criteria2 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Jenis Sepatu</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c3">
                                @foreach($criteria3 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Kegunaan</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c4">
                                @foreach($criteria4 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Bahan</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c5">
                                @foreach($criteria5 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Jenis Promosi</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c6">
                                @foreach($criteria6 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Input Bobot Kriteria Gender</label>
                        <div class="form-control-wrap">
                            <select class="form-select js-select2" name="c7">
                                @foreach($criteria7 as $data)
                                <option value="{{ $data['value'] }}">{{ $data['label'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
