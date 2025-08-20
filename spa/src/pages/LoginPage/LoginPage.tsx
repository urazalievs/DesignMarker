import { LoginForm } from '../../components/LoginForm/LoginForm';
import {RegistrationForm} from '../../components/RegistrationForm/RegistrationForm';
import './styles.scss';

export const LoginPage = () => {

    return (
        <div className='login_wrapper'>
            <div className='auth_window'>
                <LoginForm/>
                <RegistrationForm/>
            </div>
        </div>
    )
}