<template>
    <div class="nk-sidebar-menu" data-simplebar>
        <ul class="nk-menu">
            <router-link :to="{name: 'Home'}">
                <li :class="`nk-menu-item`">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                        <span class="nk-menu-text">Trang chủ</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>

            <router-link v-if="user.role == roles.ADMIN" :to="{name: 'KhoaDaoTao'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý Khóa đào tạo</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ADMIN" :to="{name: 'Khoa'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý khoa</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ADMIN" :to="{name: 'NhiemVu_List'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý Cán bộ khoa</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ADMIN" :to="{name: 'Year'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý năm học</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ADMIN" :to="{name: 'StudyTime'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý kì học</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>

            <router-link v-if="user.role == roles.ROLE_BI_THU_DOAN || user.role == roles.ROLE_PHU_TRACH_NVSP" :to="{name: 'NhiemVu_List'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Nhiệm vụ & thông báo</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_BI_THU_DOAN" :to="{name: 'Assignee'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Phụ trách viên</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_BI_THU_DOAN" :to="{name: 'Cvht'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Cố vấn học tập</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_BI_THU_DOAN" :to="{name: 'Lop'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Quản lý Chi đoàn</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_BI_THU_DOAN" :to="{name: 'ClassMeetScore'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                        <span class="nk-menu-text">Xem đánh giá Chi đoàn</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>

            <router-link v-if="user.role == roles.ROLE_LOP_TRUONG || user.role == roles.ROLE_CBL || user.role == roles.ROLE_SINH_VIEN" :to="{name: 'Notifications'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-bell-fill"></em></span>
                        <span class="nk-menu-text">Nhiệm vụ & thông báo</span>
                        <span class="nk-menu-badge">{{$store.getters['activity/activityReceiveCount']}}</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_LOP_TRUONG || user.role == roles.ROLE_CBL" :to="{name: 'CheckList'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-list-check"></em></span>
                        <span class="nk-menu-text">Điểm danh hoạt động</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_LOP_TRUONG || user.role == roles.ROLE_CBL || user.role == roles.ROLE_SINH_VIEN" :to="{name: 'PersonalCheckpoint'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-pen2"></em></span>
                        <span class="nk-menu-text">Đánh giá cá nhân</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_CVHT" :to="{name: 'TeacherCheckpoint'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                        <span class="nk-menu-text">Họp đánh giá Chi đoàn</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
            <router-link v-if="user.role == roles.ROLE_CBL" :to="{name: 'CbCheckpoint'}">
                <li class="nk-menu-item">
                    <a href="#" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                        <span class="nk-menu-text">Họp đánh giá Chi đoàn</span>
                    </a>
                </li><!-- .nk-menu-item -->
            </router-link>
        </ul><!-- .nk-menu -->
    </div><!-- .nk-sidebar-menu -->
</template>

<script>
import constants from "../../constants";
import {mapActions} from "vuex";
import {asyncLoading} from "vuejs-loading-plugin";
export default {
    methods:{
      ...mapActions({
          getNotifyList: 'activity/getActivitiesReceive',
          getCurrentStudyTime: 'studyTime/getCurrentStudyTime'
      }),
    },
    computed:{
        roles(){
            return constants.roles;
        },
        user(){
            return this.$store.getters['auth/user'];
        }
    },
    async mounted() {
        await asyncLoading(this.getNotifyList());
        await this.getCurrentStudyTime();
    }
}
</script>

<style scoped>
.router-link-exact-active .nk-menu-link{
    color: #9769ff;
    background: #ebeef2;
}
</style>
