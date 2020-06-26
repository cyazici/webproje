@extends('template')

@section('icerik')
    <div class="row3">
        <div class="hoc container clear"  >

            <form>
                <h2 style="padding-left:35px;  color:#E9365A;">İLETİŞİM FORMU</h2>
                <ul class="form-style-1">
                    <li><label>Ad Soyad <span class="required">*</span>
                        </label><input type="text" name="field1" class="field-divided"  />
                    </li>

                    <li>
                    <li><label>Dogum Tarihi <span class="required">*</span></label>
                        <input type="date" name="field2" class="field-divided"  />
                    </li>

                    <li>
                    <li><label>Telefon <span class="required">*</span></label>
                        <input type="tel" name="field3" class="field-divided"  />
                    </li>

                    <li>
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="field4" class="field-long" />
                    </li>

                    <li>
                        <label>Mesaj<span class="required">*</span></label>
                        <textarea name="field5" id="field5" class="field-long field-textarea">
        </textarea>
                    </li>

                    <li>
                        <input type="submit" value="Gönder" />
                    </li>
                </ul>
            </form>
        </div>

    </div>
@endsection
