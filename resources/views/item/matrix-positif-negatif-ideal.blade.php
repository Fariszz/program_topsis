<div class="accordion-item">
    <h2 class="accordion-header" id="headingFIve">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFIve"
            aria-expanded="true" aria-controls="collapseFIve">
            Jarak Positif Negatif Ideal
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
                                    <th class="tb-tnx-id"><span class="">Positif</span></th>
                                    @foreach ($criterias as $item)
                                    <th>C{{ $loop->iteration }}</th>
                                    @endforeach
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    @foreach ($positiveNegativeIdeal as $key => $item)
                                    <td>{{ $item['positive'] }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-tranx">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">Negatif</span></th>
                                    @foreach ($criterias as $item)
                                    <th>C{{ $loop->iteration }}</th>
                                    @endforeach
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    @foreach ($positiveNegativeIdeal as $key => $item)
                                    <td>{{ $item['negative'] }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
