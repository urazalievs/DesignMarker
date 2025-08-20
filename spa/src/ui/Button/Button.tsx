import { Button as AntButton, type ButtonProps } from "antd"

export const Button=(props:ButtonProps)=> {
  return (
    <>
        <AntButton 
            {...props}
            size={props.size ?? 'large'}
            style={props.style ?? {
                background: 'var(--purpure-gradient)',
                color: "#fff",
                boxShadow: '2px 2px 10px #a3a3a3'
            }}/>
    </>
  )
}
