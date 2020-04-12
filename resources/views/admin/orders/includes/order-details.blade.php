@foreach($orderDetails as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>
            {{ $item->product->pro_name }}
        </td>
        <td>
            <div class="m-widget4__item">
                <img class="" src="{{ asset($item->product->pro_avatar)}}" style="width: 50px;height: 50px" title="">
            </div>
        </td>

        <td>
           <span>{{ getPriceSale($item->order_detail_price, $item->order_detail_sale) }}</span> <br>
            <span style="text-decoration: line-through;color: red"> {{ number_format($item->order_detail_price, 0, '.', ',') }}</span>
        </td>
        <td>
            {{ $item->order_detail_qty }}
        </td>
        <td> {{ number_format(getPriceSale($item->order_detail_price, $item->order_detail_sale) * $item->order_detail_qty, 0, '.', ',') }}</td>
        <td>
            <a href="{{ route('ajax_admin.order.detail.delete', $item->id) }}"  class="js-delete-order-details m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
        </td>

    </tr>
@endforeach
