<template>
    <button  class="btn-white" v-bind:class="{'btn-success':followed}" v-text="text" v-on:click="follow"></button>
</template>

<script>
    export default{
        props:['activity'],
        mounted() {
            this.$http.post('/api/activity/followers',
            { 'activity':this.activity })
                .then(response => {
                    this.followed = response.data.followed
                })
        },
        data() {
            return {
                followed: false
            }
        },
        computed: {
            text() {
                return this.followed ?
                            '已收藏' : '收藏'
            }
        },
        methods:{
            follow() {
                this.$http.post('/api/activity/follow',{ 'activity':this.activity })
                    .then(response => {
                        this.followed = response.data.followed
                    })
            }
        },

    }
</script>