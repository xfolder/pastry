import router from "@/router/router.ts";
import {slugify} from "@/misc/utils.ts";
import {RouteLocation} from "vue-router";

class Product implements App.Http.Resources.ProductDto {
    id: number;
    images: Array<any>;
    ingredients: Array<App.Http.Resources.IngredientDto> | null;
    name: string;
    on_sale: boolean;
    saleable: boolean;
    price: number;
    price_in_time: number;
    quantity: number;
    constructor(item: any) {
        this.id = item.id;
        this.images = item.images;
        this.ingredients = item.ingredients;
        this.name = item.name;
        this.on_sale = item.on_sale;
        this.saleable = item.saleable;
        this.price = item.price;
        this.price_in_time = item.price_in_time;
        this.quantity = item.quantity;
    }
    route(): RouteLocation {
        return router.resolve({
            name: 'product-detail',
            params: {
                name: slugify(this.name),
                id: this.id.toString()
            },
            force: true
        })
    }

}

export default Product;
