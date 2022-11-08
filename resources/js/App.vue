<template>
<chat-form></chat-form>
</template>

<script>
import ChatForm from "./component/ChatForm"; "./component/ChatForm";
export default {
    components: {ChatForm},
    data() {
        return {
            message: 'Hello Vue!'
        };
    }
};
</script>

<style>
h1 {
    color: greenyellow;
    background-color: black;
}
</style>
