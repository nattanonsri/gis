<h2>Create New table</h2>
<!-- <a class="btn btn-primary" href="member/create">Create</a> -->
<table class="table" style="text-align: center;">
    <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อ - นามสกุล</th>
            <th>รหัสบัตรประจำตัวประชาชน</th>
            <th>วัน/เดือน/ปีเกิด</th>
            <th>disease</th>
            <th>โรคประจำตัว</th>
            <th>assist</th>
            <th>relative</th>
            <th>ผู้ดูแล</th>
            <th>ยาที่ใช้</th>
            <th>พิกัด</th>
        </tr>
    </thead>
    <tbody >
        <?php foreach ($profile as $row): ?>
            <td><?php echo $row['id']; ?></td>
            <td style="width: 12%;"><?php echo $row['fname']; ?> <?php echo $row['lname'];?></td>
            <td><?php echo $row['card_id']; ?></td>
            <td><?php echo $row['birthday']; ?></td>
            <td><?php echo $row['disease']; ?></td>
            <td><?php echo $row['disease_details']; ?></td>
            <td><?php echo $row['assist']; ?></td>
            <td><?php echo $row['relative']; ?></td>
            <td><?php echo $row['caretaker']; ?></td>
            <td><?php echo $row['medicines']; ?></td>
            <td><?php echo $row['coordinates']; ?></td>
        <?php endforeach; ?>
    </tbody>
</table>