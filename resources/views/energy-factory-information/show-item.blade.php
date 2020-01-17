<table class="table">
    <tbody>
        <tr>
            <th>ID</th><td>{{ $energyfactoryinformation->id }}</td>
        </tr>
        <tr><th> กลุ่มโรงงาน </th><td> {{ $energyfactoryinformation->factory_size }} </td></tr>
        <tr><th> ที่อยู่โรงงาน </th><td> {{ $energyfactoryinformation->factory_address }} </td></tr>
        <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->factory_tel }} </td></tr>
        <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->factory_fax }} </td></tr>
        <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->factory_email }} </td></tr>
        <tr><th> ที่อยู่สำนักงาน </th><td> {{ $energyfactoryinformation->office_address }} </td></tr>
        <tr><th> โทรศัพท์ </th><td> {{ $energyfactoryinformation->office_tel }} </td></tr>
        <tr><th> โทรสาร </th><td> {{ $energyfactoryinformation->office_fax }} </td></tr>
        <tr><th> อีเมล </th><td> {{ $energyfactoryinformation->office_email }} </td></tr>
        <tr><th> ประเภทอุตสาหกรรม </th><td> {{ $energyfactoryinformation->factory_type }} </td></tr>
        <tr><th> พนักงงานโรงงาน </th><td> {{ $energyfactoryinformation->factory_employee }} </td></tr>
        <tr><th> เวลาดำเนินการ </th><td> {{ $energyfactoryinformation->factory_operation_time }} </td></tr>
        <tr><th> User Id </th><td> {{ $energyfactoryinformation->user_id }} </td></tr>
        <tr><th> Enery Report Id </th><td> {{ $energyfactoryinformation->enery_report_id }} </td></tr>
    </tbody>
</table>