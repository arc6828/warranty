  <tr>
        <tr>
            <th>ID</th><td>{{ $energyevaluation->id }}</td>
        </tr>
        <tr><th> คะแนนนโยบาย </th><td> {{ $energyevaluation->policy_score }} </td></tr>
        <tr><th> คะแนนนการจัดองค์กร </th><td> {{ $energyevaluation->organization_score }} </td></tr>
        <tr><th> คะแนนนการสร้างแรงจูงใจ </th><td> {{ $energyevaluation->motivation_score }} </td></tr>
        <tr><th> คะแนนนข้อมูลข่าวสาร </th><td> {{ $energyevaluation->information_score }} </td></tr>
        <tr><th> คะแนนนประชาสัมพันธ์ </th><td> {{ $energyevaluation->public_relation_score }} </td></tr>
        <tr><th> คะแนนนการลงทุน </th><td> {{ $energyevaluation->investment_score }} </td></tr>
        <tr><th> Remark </th><td> {{ $energyevaluation->remark }} </td></tr>
        <tr><th> User Id </th><td> {{ $energyevaluation->user_id }} </td></tr>
        <tr><th> Enery Report Id </th><td> {{ $energyevaluation->energy_report_id }} </td></tr>
  </tr>