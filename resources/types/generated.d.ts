declare namespace App.Http.Resources {
export type IngredientDto = {
id: number;
name: string;
};
export type ProductDto = {
id: number;
name: string;
price: number;
quantity: number;
on_sale: boolean;
images: Array<any>;
ingredients: Array<App.Http.Resources.IngredientDto>;
};
}
