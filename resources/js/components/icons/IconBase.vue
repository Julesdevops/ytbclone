<template>
    <svg xmlns="http://www.w3.org/2000/svg"
        :width="width"
        :height="height"
        :viewBox="viewBox"
        :aria-labelledby="iconName"
        role="presentation"
    >
        <g :fill="iconColor">
            <slot />
        </g>
    </svg>
</template>

<script>
export default {
    props: {
        iconName: {
            type: String,
            default: 'icon'
        },
        viewBox: {
            type: String,
            default: '0 0 512 512'
        },
        width: {
            type: [Number, String],
            default: '18'
        },
        height: {
            type: [Number, String],
            default: '18'
        },
        iconColor: {
            type: String,
        }
    }
}
</script>