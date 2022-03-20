<template>
    <div class="board">
        <div
            class="board__column"
            v-for="(column, columnIndex) of columns"
            :key="columnIndex"
        >
            <div class="column__title">
                {{ column.title }}
            </div>
            <div
                class="board__card"
                v-for="(card, cardIndex) of column.cards"
                :key="cardIndex"
            >
                {{ card.title }}
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            columns: [],
        };
    },
    mounted() {
        this.fetchColumns();
    },
    methods: {
        fetchColumns() {
            axios
                .get("/api/list-cards")
                .then((response) => (this.columns = response.data))
                .catch((error) => console.log(error));
        },
    },
};
</script>
