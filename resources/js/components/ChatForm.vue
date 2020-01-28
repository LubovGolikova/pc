<template>

    <div class="input-group">

        <textarea id="btn-input" type="text" name="message" class="form-control" placeholder="" v-model="newMessage" @keyup.enter="sendMessage"></textarea>


            <button class="btn btn-primary btn-block mt-3" id="btn-chat" @click="sendMessage">
                Send
            </button>

    </div>

</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>