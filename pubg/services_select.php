<div class="form-group " dir="rtl">
                                        <select name="service" id="service_id" class="form-control" aria-label="عرض زراعة الأسنان" required>

                                        <?php

include 'info.php';




foreach ($items as $key => $value) {

echo "<option value='$value'>$value</option>";

}
?>




                                        </select>
                                    </div>
