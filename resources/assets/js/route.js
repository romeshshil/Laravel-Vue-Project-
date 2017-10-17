import VueRouter from 'vue-router';

let routes=[
{
	path:'/',
	component:require('./components/Home')
},
{
	path:'/about',
	component:require('./components/About')
},
{
	path:'/vision',
	component:require('./components/Vision')
},
{
	path:'/category',
	component:require('./components/category/Category')
},
{
	path:'/category_create',
	component:require('./components/category/Category_create')
},
{
	path:'/blog',
	component:require('./components/blog/Blog')
},
{
	path:'/blog_create',
	component:require('./components/blog/Blog_create')
}
];

export default new VueRouter({
	routes,
})