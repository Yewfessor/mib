<form action="ProductInputModel.php" id="ProductInput" method="POST">

    รูปสินค้า

    ชื่อสินค้า : <input type="text" name="work_name" id="work_name" value="" required><br>
    คำอธิบายสินค้า : <input type="text" name="work_name" id="work_name" value="" required><br>
    รายละเอียดสินค้า : <input type="textaria" name="work_name" id="work_name" value="" required><br>




    ประเภทงาน :
    <select name="work_type" id="work_type" required>
        <option value="">-ประเภท-</option>
        <option value="Development">Development</option>
        <option value="Test">Test</option>
        <option value="Document">Document</option>
    </select><br>


    สถานะ :
    <select name="work_status" id="work_status" required>
        <option value="">-สถานะ-</option>
        <option value="ดำเนินการ">ดำเนินการ </option>
        <option value="เสร็จสิ้น">เสร็จสิ้น</option>
        <option value="ยกเลิก">ยกเลิก</option>
    </select><br>
    วันเวลาที่บันทึกข้อมูล : <input type="datetime-local" name="work_save" id="work_save" value="<?php echo $work_save; ?>" required><br>
    วันเวลาที่ปรับปรุงข้อมูลล่าสุด : <input type="datetime-local" name="work_update" id="work_update" value="<?php echo $work_update; ?>" required><br>
    <input type="submit" name="worksubmit" value="บันทึก">
</form>