<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Normalisasi Matrix
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
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
                                    @foreach ($criterias as $item)
                                    <th>C{{ $loop->iteration }}</th>
                                    @endforeach
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($normalizedMatrix as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    {{-- <td>{{ $item[0] }}</td> --}}
                                    <td>Alternative {{ $loop->iteration }} </td>
                                    <td>{{ $item[1] }}</td>
                                    <td>{{ $item[2] }}</td>
                                    <td>{{ $item[3] }}</td>
                                    <td>{{ $item[4] }}</td>
                                    <td>{{ $item[5] }}</td>
                                    <td>{{ $item[6] }}</td>
                                    <td>{{ $item[7] }}</td>
                                </tr>
                            @endforeach
                            <tr class="bg-primary">
                                <td></td>
                                <td>
                                    <span class="text-white">Pembagi</span>
                                </td>
                                @foreach ($divider as $key => $item)
                                <td>
                                    <span class="text-white">{{ $item }}</span>
                                </td>
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
