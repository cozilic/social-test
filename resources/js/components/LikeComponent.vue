<template>
    <div>
        <span v-if="this.isliked == true">
            <a href="#" class="card-link" @click.prevent="toggleClass()"><i class="fas fa-heart" :style='{"color" : (this.isToggled? "red" : "" )}'></i> {{like}} </a>
        </span>
        <span v-else>
            <a href="#" class="card-link" @click.prevent="toggleClass()"><i class="fas fa-heart" :style='{"color" : (this.isToggled? "red" : "" )}'></i> {{like}} </a>
        </span>
        <span style="float:right;">
            <span class="text-muted">
                <small>
                        Likes: {{likeValue}}
                </small>
            </span>
        </span>
        <!-- <button @click.prevent="sendData()">test</button> -->
        <!-- <a v-else-if="this.isToggled" href=""></a> -->
    </div>
</template>

<script>
    export default {
        props: ['post_id','isliked','color','likes'],
        data() {
            return {
                like: 'Like',
                follow: 'Follow',
                share: 'Share',
                isToggled: this.isliked,
                likeValue: this.likes,
            }
        },
        methods: {
            toggleClass(){
            // Check value
            console.log();
            if(this.isToggled){
                this.like = 'Please Wait...'
                axios.get('/post/'+this.post_id+'/unlike')
                .then(response => {
                    this.likeValue--
                    this.isToggled = !this.isToggled
                    this.$eventBus.$emit('send-dislike', '');
                    this.like = 'Like'
                    })
            }
            else{
                this.like = 'Please Wait...'
                axios.get('/post/'+this.post_id+'/like')
                .then(response => {
                    this.likeValue++
                    this.isToggled = !this.isToggled
                    this.$eventBus.$emit('send-like', '');
                    this.like = 'Like'
                    })
            }
        },
    },
}
</script>

<style scoped>

</style>
