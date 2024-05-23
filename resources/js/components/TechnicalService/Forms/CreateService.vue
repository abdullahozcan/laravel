<script>
export default {
    name:"CreateService",
    data(){
        return{
            registered_user:false,
            name_surname:null,
            isCompany:false,
        }
    },
    mounted() {
            //this.selectTrigger(".choices-single");
    },
    methods:{
        selectTrigger(selector){
            new Choices(document.querySelector(selector));
        }
    }
}
</script>

<template>
    <div class="row g-2">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Customer İnformation </div>
                </div>
                <div class="card-body">
                    <!-- form -->
                    <div class="row mb-3">

                        <!-- form group -->
                        <div class="mb-4 col-md-3 col-12">
                            <h6> Müşteri Bilgileri</h6>
                            <p>Servis kaydı için müşteri bilgilerini girmelisiniz. Eski müşterilerden seçim yapmak için "Mevcut müşterilerden seç" butonunu tıklamanız gerekiyor.</p>
                        </div>
                        <!-- form group -->
                        <div class="mb-4 col-md-9 col-12">
                            <div class="form-check form-switch m-4">
                                <input class="form-check-input" type="checkbox" v-model="registered_user" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Kayıtlı Kullanıcı</label>
                            </div>
                            <!-- registered user -->
                            <div class="form-check" v-if="registered_user">
                                <label class="form-label"> Müşteri Seç </label>
                                <select class="form-control choices-single" >
                                    <option></option>
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>


                            <!-- new user -->
                            <div v-else>
                                <div class="form-check col-md-12">
                                    <label class="form-label"> <b> İsim Soyisim *</b> </label>
                                    <input class="form-control" name="name_surname" v-model="name_surname">
                                </div>
                                <div class="row g-3 p-1">
                                    <div class="form-check col-md-6">
                                        <label class="form-label"> <b> Telefon *</b> </label>
                                        <input class="form-control" name="name_surname" v-model="phone">
                                    </div>
                                    <div class="form-check col-md-6">
                                        <label class="form-label"> <b> Eposta *</b> </label>
                                        <input class="form-control" name="name_surname" v-model="email">
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="mb-4 col-md-3 col-12">
                            <h6> Diğer Bilgiler</h6>
                            <p>Servis kaydı için zorunlu olmayan ancak almak istediğiniz bilgiler.</p>
                        </div>
                        <!-- form group -->
                        <div class="mb-4 ps-5 col-md-9 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" v-model="isCompany" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="false" checked>
                                <label class="form-check-label" for="inlineRadio1">Bireysel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" v-model="isCompany" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="true">
                                <label class="form-check-label" for="inlineRadio2">Kurumsal</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-md btn-outline-success m-1"><i class="fas fa-save"></i> Kaydet </button>
                    <button class="btn btn-md btn-outline-danger"><i class="fas fa-delete-left"></i> Vazgeç </button>
                </div>
            </div>

        </div>
    </div>

</template>

<style scoped>

</style>
