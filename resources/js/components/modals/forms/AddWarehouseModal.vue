<template>
  <div
    class="modal fade"
    id="kt_modal_add"
    ref="addModalRef"
    tabindex="-1"
    aria-hidden="true"
  >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_header">
          <!--begin::Modal title-->
          <h2 class="fw-bold">Add Warehouse Modal</h2>
          <!--end::Modal title-->

          <!--begin::Close-->
          <div
            id="kt_modal_add_close"
            data-bs-dismiss="modal"
            class="btn btn-icon btn-sm btn-active-icon-primary"
          >
            <span class="svg-icon svg-icon-1">
              <inline-svg
                :src="getAssetPath('media/icons/duotune/arrows/arr061.svg')"
              />
            </span>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Form-->
        <el-form
          @submit.prevent="submit()"
          :model="formData"
          :rules="rules"
          ref="formRef"
        >
          <!--begin::Modal body-->
          <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div
              class="scroll-y me-n7 pe-7"
              id="kt_modal_add_scroll"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-max-height="auto"
              data-kt-scroll-dependencies="#kt_modal_add_header"
              data-kt-scroll-wrappers="#kt_modal_add_scroll"
              data-kt-scroll-offset="300px"
            >
              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semobold mb-2">Warehouse Name</label>
                <!--end::Label-->

                <!--begin::Input-->
                <el-form-item prop="name">
                  <el-input
                    v-model="formData.name"
                    type="text"
                    placeholder="Enter a Warehouse Name"
                  />
                </el-form-item>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semobold mb-2">
                  <span class="required">Code</span>

                  <i
                    class="fas fa-exclamation-circle ms-1 fs-7"
                    data-bs-toggle="tooltip"
                    title="Explain a warehouse code"
                  ></i>
                </label>
                <!--end::Label-->

                <!--begin::Input-->
                <el-form-item prop="code">
                  <el-input placeholder="Enter code" v-model="formData.code" />
                </el-form-item>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="fv-row mb-15">
                <!--begin::Label-->
                <label class="fs-6 required fw-semobold mb-2">Address</label>
                <!--end::Label-->

                <!--begin::Input-->
                <el-form-item prop="address">
                  <el-input v-model="formData.address" placeholder="Enter address" type="text" />
                </el-form-item>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="fv-row mb-15">
                <!--begin::Label-->
                <label class="fs-6 fw-semobold required mb-2">Contact No</label>
                <!--end::Label-->

                <!--begin::Input-->
                <el-form-item prop="contact_num">
                  <el-input v-model="formData.contact_num"  placeholder="Enter a Contact No" type="text" />
                </el-form-item>
                <!--end::Input-->
              </div>
              <!--end::Input group-->

            </div>
            <!--end::Scroll-->
          </div>
          <!--end::Modal body-->

          <!--begin::Modal footer-->
          <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button
              type="reset"
              id="kt_modal_add_cancel"
              class="btn btn-light me-3"
            >
              Discard
            </button>
            <!--end::Button-->

            <!--begin::Button-->
            <button
              :data-kt-indicator="loading ? 'on' : null"
              class="btn btn-lg btn-primary"
              type="submit"
            >
              <span v-if="!loading" class="indicator-label">
                Submit
                <span class="svg-icon svg-icon-3 ms-2 me-0">
                  <inline-svg
                    :src="
                      getAssetPath('media/icons/duotune/arrows/arr064.svg')
                    "
                  />
                </span>
              </span>
              <span v-if="loading" class="indicator-progress">
                Please wait...
                <span
                  class="spinner-border spinner-border-sm align-middle ms-2"
                ></span>
              </span>
            </button>
            <!--end::Button-->
          </div>
          <!--end::Modal footer-->
        </el-form>
        <!--end::Form-->
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { getAssetPath } from "@/core/helpers/assets";
import { defineComponent, ref } from "vue";
import { hideModal } from "@/core/helpers/dom";
import Swal from "sweetalert2";

// import { storeToRefs } from 'pinia';
import { useWarehouses } from "../../../stores/warehouses";

export default defineComponent({
  name: "add-warehouse-modal",
  components: {},
  setup(props) {
    const formRef = ref<null | HTMLFormElement>(null);
    const addModalRef = ref<null | HTMLElement>(null);
    const loading = ref<boolean>(false);
    const warehousesStore = useWarehouses();
    const errors = ref(null);
    const formData = ref({
      name: null,
      code: null,
      address: null,
      contact_num: null
    });

    const rules = ref({
      name: [
        {
          required: true,
          message: "Warehouse name is required",
          trigger: "change",
        },
      ],
      code: [
        {
          required: true,
          message: "Code is required",
          trigger: "change",
        },
      ],
      address: [
        {
          required: true,
          message: "Address is required",
          trigger: "change",
        },
      ],
      contact_num: [
        {
          required: true,
          message: "Contact No is required",
          trigger: "change",
        },
      ]
    });

    const submit = () => {
      if (!formRef.value) {
        return;
      }

      formRef.value.validate( async (valid: boolean) => {
        if (valid) {
          loading.value = true;
            const data = {
                ...formData.value,
                user_id: 3
            }
            const res = await warehousesStore.addWarehouse(data);
            console.log(res);
           if(res.status == 201) {
                setTimeout(() => {
                loading.value = false;
                Swal.fire({
                text: `${res.data.message}`,
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                heightAuto: false,
                customClass: {
                    confirmButton: "btn btn-primary",
                },
                }).then(() => {
                    formRef.value.resetFields()
                hideModal(addModalRef.value);
                });
            }, 2000);
           } else if (res.status == 422) {
                loading.value = false;
                errors.value = res.data.errors;
                Swal.fire({
                    text: `${res.data.message}`,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    heightAuto: false,
                    customClass: {
                    confirmButton: "btn btn-primary",
                    },
            });
           } else {
            console.log(res,'dsad');
           }
        } else {
          Swal.fire({
            text: "Sorry, looks like there are some errors detected, please try again.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            heightAuto: false,
            customClass: {
              confirmButton: "btn btn-primary",
            },
          });
          return false;
        }
      });
    };

    return {
      formData,
      rules,
      submit,
      formRef,
      loading,
      addModalRef,
      getAssetPath
    };
  },
});
</script>
