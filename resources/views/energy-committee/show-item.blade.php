  <tr>
            <tr>
                <th>ID</th><td>{{ $energycommittee->id }}</td>
            </tr>
            <tr><th> ประธาน </th><td> {{ $energycommittee->president }} </td></tr>
            <tr><th> ผู้รับผิดชอบสามัญ </th><td> {{ $energycommittee->common_responsible_person }} </td></tr>
            <tr><th> ผู้รับผิดชอบสามัญ ทะเบียนเลขที่ </th><td> {{ $energycommittee->common_responsible_person_code }} </td></tr>
            <tr><th> ผู้รับผิดชอบอาวุโส </th><td> {{ $energycommittee->senior_responsible_person }} </td></tr>
            <tr><th> ผู้รับผิดชอบอาวุโส ทะเบียนเลขที่ </th><td> {{ $energycommittee->senior_responsible_person_code }} </td></tr>
            <tr><th> เจ้าของโรงงาน </th><td> {{ $energycommittee->factory_owner }} </td></tr>
            <tr><th> User Id </th><td> {{ $energycommittee->user_id }} </td></tr>
            <tr><th> Enery Report Id </th>
            <td> {{ $energycommittee->enery_report_id }} </td></tr>
  </tr>