<div class="accordion-item">
    <h2 class="accordion-header" id="headingFIve">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFIve"
            aria-expanded="true" aria-controls="collapseFIve">
            Jarak Positif Negatif
        </button>
    </h2>
    <div id="collapseFIve" class="accordion-collapse collapse" aria-labelledby="headingFIve"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <article class="card">
                <div class="card-inner card-inner-xl">
                    <div class="card card-preview">
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">#</span></th>
                                    <th>Alternative</th>
                                    <th>Positif</th>
                                    <th>Negative</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($positiveNegative as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Alternative {{ $key }}</td>
                                    <td>{{ $item['positive'] }}</td>
                                    <td>{{ $item['negative'] }}</td>
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
