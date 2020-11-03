<table>
    <thead>

    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>

        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-size: 36px;font-family: 'Segoe UI'">BẢNG THỐNG KÊ VẬN CHUYỂN</th>
            <th></th>
            <th></th>
            <th> </th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Từ ngày :</th>
            <th>01/06/2020 - 30/06/2020</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>Công ty TNHH Thương Mại vận tải Quý Long</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Mã khách hàng :</th>
            <th>TMG-253536</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Tên Đơn vị:</th>
            <th>Công ty TNHH Thiên Minh Group</th>
            <th></th>
            <th></th>
        </tr>
    </tbody>
</table>
<table>
    <thead>
    <tr>
        <th style="">Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($donhangs as $donhang)
        <tr>
            <td>{{ $donhang->madonhang }}</td>
            <td>{{ $donhang->madonhang }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
