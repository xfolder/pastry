import { kebabCase } from "lodash";
const formatPrice = (price: string|number|bigint, prefix: string|null = null, suffix:string|null = null): string => {
    let result = "";
    if (prefix) {
        result += prefix + " ";
    }
    const formatter = new Intl.NumberFormat('it-IT', {
        minimumFractionDigits: 2,
    });
    result += formatter.format(Number(price));

    if (suffix) {
        result += " " + suffix;
    }

    return result;
}

const slugify = (text: string): string => {
    return kebabCase(text);
}



export { formatPrice, slugify }
