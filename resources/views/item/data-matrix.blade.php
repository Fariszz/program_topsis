<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Data Matrix
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <a href="#"><span>{{ $loop->iteration }}</span></a>
                                    </td>
                                    <td>
                                        <span>{{ $item->name }}</span>
                                    </td>
                                    @foreach ($item->values as $value)
                                    <td>
                                        <span>{{ $value->value }}</span>
                                    </td>
                                    @endforeach
                                    <td>
                                        <form action="{{ route('delete-data', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    @foreach ($criterias as $item)
                                    <td>
                                        @if ($item->categories == 'benefit')
                                        <span class="text-primary">{{ $item->categories }}</span>
                                        @elseif ($item->categories == 'cost')
                                        <span class="text-danger">{{ $item->categories }}</span>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                <tr class="bg-primary">
                                    <td></td>
                                    <td>
                                        <span class="text-white">Weight</span>
                                    </td>
                                    @foreach ($criterias as $item)
                                    <td>
                                        <span class="text-white">{{ $item->weight }}</span>
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
