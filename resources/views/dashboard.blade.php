<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    {{-- <h1>{{ request()->user()->name }}</h1> --}}

    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="Card">
                    <div class="card-body">
                        <div>Products Terjual</div>
                        <H1 class="fw-bold">{{ number_format($productsSold) }}</H1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="Card">
                    <div class="card-body">
                        <div>Pendapatan</div>
                        <H1 class="fw-bold">Rp{{ number_format($revenue) }}</H1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="Card">
                    <div class="card-body">
                        <div>Orders</div>
                        <H1 class="fw-bold">{{ number_format($ordersCount) }}</H1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="Card">
                    <div class="card-body">
                        <div>products</div>
                        <H1 class="fw-bold">{{ number_format($productsCount) }}</H1>
                    </div>
                </div>
            </div>
        </div>

        <H6>{{ count($recentOrders) }} Orders Terkini</H6>

        <div class="card mb-2 overflow-hidden">
            <Table class="table m-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>user</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($recentOrders as $Order)
                        <tr>
                            <td>Order #{{ $Order->id }}</td>
                            <td>{{ $Order->customer }}</td>
                            <td>{{ number_format($Order->payment) }}</td>
                            <td>{{ number_format($Order->total) }}</td>
                            <td>{{ $Order->user->name }}</td>
                            <td>{{ $Order->formatted_created_at }}</td>
                            <td class="text-end">
                                <a href="{{ route('orders.show', ['order' => $Order->id]) }}"
                                    class="btn btn-sm btn-primary">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada order</td>
                        </tr>
                    @endforelse
                </tbody>
            </Table>
        </div>
    </div>
</x-layout>
