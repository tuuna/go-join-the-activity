<template>
    <button  class="btn btn-default" v-bind:class="{'btn-success':followed}" v-text="text" v-on:click="follow"></button>
</template>

<script>
    export default{
        props:['sponsor'],
        mounted() {
            this.$http.post('/api/sponsor/followers',
            { 'sponsor':this.sponsor })
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
                            '已关注' : '关注'
            }
        },
        methods:{
            follow() {
                this.$http.post('/api/sponsor/follow',{ 'sponsor':this.sponsor })
                    .then(response => {
                        this.followed = response.data.followed
                    })
            }
        },

    }
</script>