<template>
    <div :class="{classA: scrollY == 0, classB: test}" class="header_wrap">
        <div class="header_wrap_inner">
            <a :href="'/'">
                <img alt="ロゴ画像" :src="'/img/common/header/logo.png'">
            </a>
            <span class="header_coment">Laravel(PHP)で作成しました<span class="sp_none">・スマホ対応済です</span></span>
            <ul class="header_list">
                <li><a class="underline" :href="'/works'">WORKS</a></li>
                <li><a class="underline" :href="'/skills'">SKILLS</a></li>
                <li><a class="underline" :href="'/profile'">PROFILE</a></li>
                <li><a class="underline" :href="'/story'">STORY</a></li>
                <li><a class="underline" :href="'/uiux'">UI UX</a></li>
                <li><a class="underline" :href="'/about'">ABOUT</a></li>
            </ul>
            <div class="header_list_wrap_sp">
                <input type="checkbox" id="cp_toggle01" class="header_list_check_sp">
                <label for="cp_toggle01" class="header_list_label_sp"><span></span></label>
                <div class="header_list_inner_sp">
                    <ul class="header_list_sp">
                        <li><a :href="'/works'">WORKS</a></li>
                        <li><a :href="'/skills'">SKILLS</a></li>
                        <li><a :href="'/profile'">PROFILE</a></li>
                        <li><a :href="'/story'">STORY</a></li>
                        <li><a :href="'/uiux'">UI UX</a></li>
                        <li><a :href="'/about'">ABOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                scrollY: 0,
                lp: 0,
                test: false,
            }
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        methods: {
            handleScroll() {
                this.scrollY = window.scrollY;
                if ( scrollY > 250 && this.lp < window.scrollY) {
                     this.test = true
                 } else {
                     this.test = false
                 }
                this.lp = window.scrollY;
            },
        },
    }
</script>
