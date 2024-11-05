<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลผู้ส่งและผู้รับจดหมาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">ข้อมูลผู้ส่งจดหมาย</h2>
        <form class="row g-3 needs-validation" novalidate id="senderForm">
            <div class="col-md-6">
                <label for="senderFirstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="senderFirstName" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
            <div class="col-md-6">
                <label for="senderLastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="senderLastName" required>
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
            <div class="col-md-4">
                <label for="senderHouseNumber" class="form-label">บ้านเลขที่</label>
                <input type="text" class="form-control" id="senderHouseNumber" required pattern="[0-9]+" title="กรุณากรอกเฉพาะตัวเลข">
                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่ (เฉพาะตัวเลข)</div>
            </div>
            <div class="col-md-4">
                <label for="senderVillage" class="form-label">หมู่บ้าน</label>
                <input type="text" class="form-control" id="senderVillage" required>
                <div class="invalid-feedback">กรุณากรอกหมู่บ้าน</div>
            </div>
            <div class="col-md-4">
                <label for="senderAlley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="senderAlley" required>
                <div class="invalid-feedback">กรุณากรอกซอย</div>
            </div>
            <div class="col-md-4">
                <label for="senderSubDistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="senderSubDistrict" required>
                <div class="invalid-feedback">กรุณากรอกตำบล</div>
            </div>
            <div class="col-md-4">
                <label for="senderDistrict" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="senderDistrict" required>
                <div class="invalid-feedback">กรุณากรอกอำเภอ</div>
            </div>
            <div class="col-md-4">
                <label for="senderProvince" class="form-label">จังหวัด</label>
                <select class="form-select" id="senderProvince" required>
                    <option selected disabled value="">เลือกจังหวัด...</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กระบี่</option>
                    <option>กาญจนบุรี</option>
                    <option>กาฬสินธุ์</option>
                    <option>กำแพงเพชร</option>
                    <option>ขอนแก่น</option>
                    <option>จันทบุรี</option>
                    <option>ฉะเชิงเทรา</option>
                    <option>ชลบุรี</option>
                    <option>ชัยนาท</option>
                    <option>ชัยภูมิ</option>
                    <option>ชุมพร</option>
                    <option>เชียงราย</option>
                    <option>เชียงใหม่</option>
                    <option>ตรัง</option>
                    <option>ตราด</option>
                    <option>ตาก</option>
                    <option>นครนายก</option>
                    <option>นครปฐม</option>
                    <option>นครพนม</option>
                    <option>นครราชสีมา</option>
                    <option>นครศรีธรรมราช</option>
                    <option>นครสวรรค์</option>
                    <option>นนทบุรี</option>
                    <option>นราธิวาส</option>
                    <option>น่าน</option>
                    <option>บึงกาฬ</option>
                    <option>บุรีรัมย์</option>
                    <option>ปทุมธานี</option>
                    <option>ประจวบคีรีขันธ์</option>
                    <option>ปราจีนบุรี</option>
                    <option>ปัตตานี</option>
                    <option>พระนครศรีอยุธยา</option>
                    <option>พะเยา</option>
                    <option>พังงา</option>
                    <option>พัทลุง</option>
                    <option>พิจิตร</option>
                    <option>พิษณุโลก</option>
                    <option>เพชรบุรี</option>
                    <option>เพชรบูรณ์</option>
                    <option>แพร่</option>
                    <option>ภูเก็ต</option>
                    <option>มหาสารคาม</option>
                    <option>มุกดาหาร</option>
                    <option>แม่ฮ่องสอน</option>
                    <option>ยโสธร</option>
                    <option>ยะลา</option>
                    <option>ร้อยเอ็ด</option>
                    <option>ระนอง</option>
                    <option>ระยอง</option>
                    <option>ราชบุรี</option>
                    <option>ลพบุรี</option>
                    <option>ลำปาง</option>
                    <option>ลำพูน</option>
                    <option>เลย</option>
                    <option>ศรีสะเกษ</option>
                    <option>สกลนคร</option>
                    <option>สงขลา</option>
                    <option>สตูล</option>
                    <option>สมุทรปราการ</option>
                    <option>สมุทรสงคราม</option>
                    <option>สมุทรสาคร</option>
                    <option>สระแก้ว</option>
                    <option>สระบุรี</option>
                    <option>สิงห์บุรี</option>
                    <option>สุโขทัย</option>
                    <option>สุพรรณบุรี</option>
                    <option>สุราษฎร์ธานี</option>
                    <option>สุรินทร์</option>
                    <option>หนองคาย</option>
                    <option>หนองบัวลำภู</option>
                    <option>อ่างทอง</option>
                    <option>อำนาจเจริญ</option>
                    <option>อุดรธานี</option>
                    <option>อุตรดิตถ์</option>
                    <option>อุทัยธานี</option>
                    <option>อุบลราชธานี</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
            </div>
            <div class="col-md-4">
                <label for="senderZip" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="senderZip" required pattern="[0-9]{5}" title="กรุณากรอกรหัสไปรษณีย์ 5 หลัก">
                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์ (5 หลัก)</div>
            </div>

            <div class="col-md-6">
                <label for="sendDate" class="form-label">วันที่ส่ง</label>
                <input type="date" class="form-control" id="sendDate" required>
                <div class="invalid-feedback">กรุณาระบุวันที่ส่ง</div>
            </div>

            <h2 class="text-center mb-4">ข้อมูลผู้รับจดหมาย</h2>
            <div class="col-md-6">
                <label for="receiverFirstName" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="receiverFirstName" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
            <div class="col-md-6">
                <label for="receiverLastName" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="receiverLastName" required>
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
            <div class="col-md-4">
                <label for="receiverHouseNumber" class="form-label">บ้านเลขที่</label>
                <input type="text" class="form-control" id="receiverHouseNumber" required pattern="[0-9]+" title="กรุณากรอกเฉพาะตัวเลข">
                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่ (เฉพาะตัวเลข)</div>
            </div>
            <div class="col-md-4">
                <label for="receiverVillage" class="form-label">หมู่บ้าน</label>
                <input type="text" class="form-control" id="receiverVillage" required>
                <div class="invalid-feedback">กรุณากรอกหมู่บ้าน</div>
            </div>
            <div class="col-md-4">
                <label for="receiverAlley" class="form-label">ซอย</label>
                <input type="text" class="form-control" id="receiverAlley" required>
                <div class="invalid-feedback">กรุณากรอกซอย</div>
            </div>
            <div class="col-md-4">
                <label for="receiverSubDistrict" class="form-label">ตำบล</label>
                <input type="text" class="form-control" id="receiverSubDistrict" required>
                <div class="invalid-feedback">กรุณากรอกตำบล</div>
            </div>
            <div class="col-md-4">
                <label for="receiverDistrict" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" id="receiverDistrict" required>
                <div class="invalid-feedback">กรุณากรอกอำเภอ</div>
            </div>
            <div class="col-md-4">
                <label for="receiverProvince" class="form-label">จังหวัด</label>
                <select class="form-select" id="receiverProvince" required>
                    <option selected disabled value="">เลือกจังหวัด...</option>
                    <option>กรุงเทพมหานคร</option>
                    <option>กระบี่</option>
                    <option>กาญจนบุรี</option>
                    <option>กาฬสินธุ์</option>
                    <option>กำแพงเพชร</option>
                    <option>ขอนแก่น</option>
                    <option>จันทบุรี</option>
                    <option>ฉะเชิงเทรา</option>
                    <option>ชลบุรี</option>
                    <option>ชัยนาท</option>
                    <option>ชัยภูมิ</option>
                    <option>ชุมพร</option>
                    <option>เชียงราย</option>
                    <option>เชียงใหม่</option>
                    <option>ตรัง</option>
                    <option>ตราด</option>
                    <option>ตาก</option>
                    <option>นครนายก</option>
                    <option>นครปฐม</option>
                    <option>นครพนม</option>
                    <option>นครราชสีมา</option>
                    <option>นครศรีธรรมราช</option>
                    <option>นครสวรรค์</option>
                    <option>นนทบุรี</option>
                    <option>นราธิวาส</option>
                    <option>น่าน</option>
                    <option>บึงกาฬ</option>
                    <option>บุรีรัมย์</option>
                    <option>ปทุมธานี</option>
                    <option>ประจวบคีรีขันธ์</option>
                    <option>ปราจีนบุรี</option>
                    <option>ปัตตานี</option>
                    <option>พระนครศรีอยุธยา</option>
                    <option>พะเยา</option>
                    <option>พังงา</option>
                    <option>พัทลุง</option>
                    <option>พิจิตร</option>
                    <option>พิษณุโลก</option>
                    <option>เพชรบุรี</option>
                    <option>เพชรบูรณ์</option>
                    <option>แพร่</option>
                    <option>ภูเก็ต</option>
                    <option>มหาสารคาม</option>
                    <option>มุกดาหาร</option>
                    <option>แม่ฮ่องสอน</option>
                    <option>ยโสธร</option>
                    <option>ยะลา</option>
                    <option>ร้อยเอ็ด</option>
                    <option>ระนอง</option>
                    <option>ระยอง</option>
                    <option>ราชบุรี</option>
                    <option>ลพบุรี</option>
                    <option>ลำปาง</option>
                    <option>ลำพูน</option>
                    <option>เลย</option>
                    <option>ศรีสะเกษ</option>
                    <option>สกลนคร</option>
                    <option>สงขลา</option>
                    <option>สตูล</option>
                    <option>สมุทรปราการ</option>
                    <option>สมุทรสงคราม</option>
                    <option>สมุทรสาคร</option>
                    <option>สระแก้ว</option>
                    <option>สระบุรี</option>
                    <option>สิงห์บุรี</option>
                    <option>สุโขทัย</option>
                    <option>สุพรรณบุรี</option>
                    <option>สุราษฎร์ธานี</option>
                    <option>สุรินทร์</option>
                    <option>หนองคาย</option>
                    <option>หนองบัวลำภู</option>
                    <option>อ่างทอง</option>
                    <option>อำนาจเจริญ</option>
                    <option>อุดรธานี</option>
                    <option>อุตรดิตถ์</option>
                    <option>อุทัยธานี</option>
                    <option>อุบลราชธานี</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
            </div>
            <div class="col-md-4">
                <label for="receiverZip" class="form-label">รหัสไปรษณีย์</label>
                <input type="text" class="form-control" id="receiverZip" required pattern="[0-9]{5}" title="กรุณากรอกรหัสไปรษณีย์ 5 หลัก">
                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์ (5 หลัก)</div>
            </div>

            <div class="col-md-6">
                <label for="receiveDate" class="form-label">วันที่รับ</label>
                <input type="date" class="form-control" id="receiveDate" required>
                <div class="invalid-feedback">กรุณาระบุวันที่รับ</div>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">ส่งข้อมูลไปณ์ณี</button>
            </div>
        </form>

        <h3 class="text-center mt-5">แสดง</h3>
        <div id="displayArea" class="mt-4 border p-4"></div>
    </div>

    <script>
        // Bootstrap custom validation
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })();

        document.getElementById('senderForm').addEventListener('submit', function (e) {
            e.preventDefault();
            if (this.checkValidity()) {
                displayInfo();
            }
        });

        function displayInfo() {
            const senderFirstName = document.getElementById('senderFirstName').value;
            const senderLastName = document.getElementById('senderLastName').value;
            const senderHouseNumber = document.getElementById('senderHouseNumber').value;
            const senderVillage = document.getElementById('senderVillage').value;
            const senderAlley = document.getElementById('senderAlley').value;
            const senderSubDistrict = document.getElementById('senderSubDistrict').value;
            const senderDistrict = document.getElementById('senderDistrict').value;
            const senderProvince = document.getElementById('senderProvince').value;
            const senderZip = document.getElementById('senderZip').value;
            const sendDate = document.getElementById('sendDate').value;

            const receiverFirstName = document.getElementById('receiverFirstName').value;
            const receiverLastName = document.getElementById('receiverLastName').value;
            const receiverHouseNumber = document.getElementById('receiverHouseNumber').value;
            const receiverVillage = document.getElementById('receiverVillage').value;
            const receiverAlley = document.getElementById('receiverAlley').value;
            const receiverSubDistrict = document.getElementById('receiverSubDistrict').value;
            const receiverDistrict = document.getElementById('receiverDistrict').value;
            const receiverProvince = document.getElementById('receiverProvince').value;
            const receiverZip = document.getElementById('receiverZip').value;
            const receiveDate = document.getElementById('receiveDate').value;

            document.getElementById('displayArea').innerHTML = `
                <p><strong>ข้อมูลผู้ส่ง:</strong></p>
                <p>ชื่อ: ${senderFirstName} ${senderLastName}</p>
                <p>บ้านเลขที่: ${senderHouseNumber}, หมู่บ้าน: ${senderVillage}, ซอย: ${senderAlley}, ตำบล: ${senderSubDistrict}, อำเภอ: ${senderDistrict}, จังหวัด: ${senderProvince}, รหัสไปรษณีย์: ${senderZip}</p>
                <p>วันที่ส่ง: ${sendDate}</p>
                <p><strong>ข้อมูลผู้รับ:</strong></p>
                <p>ชื่อ: ${receiverFirstName} ${receiverLastName}</p>
                <p>บ้านเลขที่: ${receiverHouseNumber}, หมู่บ้าน: ${receiverVillage}, ซอย: ${receiverAlley}, ตำบล: ${receiverSubDistrict}, อำเภอ: ${receiverDistrict}, จังหวัด: ${receiverProvince}, รหัสไปรษณีย์: ${receiverZip}</p>
                <p>วันที่รับ: ${receiveDate}</p>
            `;
        }
    </script>

</body>
</html>
