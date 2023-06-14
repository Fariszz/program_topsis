<div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
            Nilai Prefernsi
        </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
        data-bs-parent="#accordionExample">
        {{-- create in center with margin --}}
        <div class="accordion-body">
            <div class="container mt-5 mx-5">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="true" aria-controls="collapseWidthExample">
                    Coefficient Closeness
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample2" aria-expanded="false" aria-controls="collapseWidthExample2">
                    Sorting From Highest
                </button>

            </div>
            <article class="card collapse multi-collapse show" id="collapseWidthExample">
                <div class="card-inner card-inner-xl">
                    <div class="card card-preview">
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">#</span></th>
                                    <th>Alternative</th>
                                    <th>Nilai Preferensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($closenessCoefficient as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Alternative {{ $key }}</td>
                                    <td>{{ $item }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
            <article class="card collapse multi-collapse" id="collapseWidthExample2">
                <div class="card-inner card-inner-xl">
                    <div class="card card-preview">
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">#</span></th>
                                    <th>Alternative</th>
                                    <th>Nilai Preferensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sortData as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Alternative {{ $key }}</td>
                                    <td>{{ $item }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
