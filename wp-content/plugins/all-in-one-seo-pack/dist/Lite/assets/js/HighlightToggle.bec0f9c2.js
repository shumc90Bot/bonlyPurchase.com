import{B as y}from"./Checkbox.257a03d8.js";import{S as p}from"./Checkmark.aaedf5f6.js";import{x as b,o as r,c,m as i,a as s,I as u,k as g,b as h,J as d,H as k,l as C,q as v}from"./vue.runtime.esm-bundler.4a881941.js";import{_ as m}from"./_plugin-vue_export-helper.abeb2ae0.js";const B={components:{SvgCheckmark:p},props:{modelValue:[String,Boolean],name:String,labelClass:{type:String,default(){return""}},inputClass:{type:String,default(){return""}},id:String,size:String,disabled:Boolean,type:{type:Number,default(){return 1}}},computed:{typeClass(){return`type-${this.type}`}},methods:{labelToggle(){this.$refs.input.click()}}},S={class:"form-radio-wrapper"},V={class:"form-radio"},x=["checked","disabled","name","id"],z={class:"fancy-radio"};function T(a,t,e,_,f,n){const l=b("svg-checkmark");return r(),c("label",{class:u(["aioseo-radio",[e.labelClass,{[e.size]:e.size},n.typeClass,{disabled:e.disabled}]]),onKeydown:[t[1]||(t[1]=d((...o)=>n.labelToggle&&n.labelToggle(...o),["enter"])),t[2]||(t[2]=d((...o)=>n.labelToggle&&n.labelToggle(...o),["space"]))],onClick:k(()=>{},["stop"])},[i(a.$slots,"header"),s("span",S,[s("span",V,[s("input",{type:"radio",onInput:t[0]||(t[0]=o=>a.$emit("update:modelValue",o.target.checked)),checked:e.modelValue,disabled:e.disabled,name:e.name,id:e.id,class:u(e.inputClass),ref:"input"},null,42,x),s("span",z,[e.type===1?(r(),g(l,{key:0})):h("",!0)])])]),i(a.$slots,"default")],34)}const w=m(B,[["render",T]]);const q={components:{BaseCheckbox:y,BaseRadio:w},props:{type:{type:String,required:!0},name:{type:String,required:!0},modelValue:{type:[Boolean,String,Event],required:!0},active:Boolean,size:String,round:Boolean},methods:{toggleCheckbox(){this.$refs.toggle.labelToggle()}}};function A(a,t,e,_,f,n){return r(),c("div",{class:u(["aioseo-highlight-toggle",[{active:e.active},{[e.size]:e.size}]]),onClick:t[1]||(t[1]=(...l)=>n.toggleCheckbox&&n.toggleCheckbox(...l))},[(r(),g(v(`base-${e.type}`),{ref:"toggle",name:e.name,modelValue:e.modelValue,size:e.size,round:e.round,"onUpdate:modelValue":t[0]||(t[0]=l=>a.$emit("update:modelValue",l))},{default:C(()=>[i(a.$slots,"default")]),_:3},8,["name","modelValue","size","round"]))],2)}const I=m(q,[["render",A]]);export{I as B};
